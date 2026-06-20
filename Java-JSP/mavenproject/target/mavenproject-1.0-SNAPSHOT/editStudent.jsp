<%-- 
    Document   : editStudent
    Created on : 07-Jun-2026, 4:14:26 pm
    Author     : ravis
--%>

<%@page import="java.sql.*"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>

<%
int id = Integer.parseInt(request.getParameter("id"));

Class.forName("com.mysql.cj.jdbc.Driver");

Connection con = DriverManager.getConnection(
    "jdbc:mysql://localhost:3306/jsp_curd_db",
    "root",
    ""
);

PreparedStatement ps =
    con.prepareStatement(
        "SELECT * FROM students WHERE id=?"
    );

ps.setInt(1, id);

ResultSet rs = ps.executeQuery();

if(rs.next()){
%>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Edit Student</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-warning">
            <h3>Edit Student</h3>
        </div>

        <div class="card-body">

            <form action="updateStudent.jsp" method="post">

                <input type="hidden"
                       name="id"
                       value="<%= rs.getInt("id") %>">

                <!-- Name -->

                <div class="mb-3">
                    <label>Name</label>

                    <input type="text"
                           name="name"
                           class="form-control"
                           value="<%= rs.getString("name") %>">
                </div>

                <!-- Email -->

                <div class="mb-3">
                    <label>Email</label>

                    <input type="email"
                           name="email"
                           class="form-control"
                           value="<%= rs.getString("email") %>">
                </div>

                <!-- DOB -->

                <div class="mb-3">
                    <label>DOB</label>

                    <input type="date"
                           name="dob"
                           class="form-control"
                           value="<%= rs.getString("dob") %>">
                </div>

                <!-- Gender -->

                <div class="mb-3">

                    <label>Gender</label>
                    <br>

                    <input type="radio"
                           name="gender"
                           value="Male"
                           <%= rs.getString("gender").equals("Male") ? "checked" : "" %>>
                    Male

                    <input type="radio"
                           name="gender"
                           value="Female"
                           <%= rs.getString("gender").equals("Female") ? "checked" : "" %>>
                    Female

                </div>

                <!-- Course -->

                <div class="mb-3">

                    <label>Course</label>

                    <select name="course"
                            class="form-select">

                        <option <%= rs.getString("course").equals("BCA") ? "selected" : "" %>>
                            BCA
                        </option>

                        <option <%= rs.getString("course").equals("BBA") ? "selected" : "" %>>
                            BBA
                        </option>

                        <option <%= rs.getString("course").equals("B.Tech") ? "selected" : "" %>>
                            B.Tech
                        </option>

                        <option <%= rs.getString("course").equals("MCA") ? "selected" : "" %>>
                            MCA
                        </option>

                    </select>

                </div>

                <!-- Hobbies -->

                <%
                    String hobbies = rs.getString("hobbies");
                %>

                <div class="mb-3">

                    <label>Hobbies</label>
                    <br>

                    <input type="checkbox"
                           name="hobbies"
                           value="Cricket"
                           <%= hobbies.contains("Cricket") ? "checked" : "" %>>
                    Cricket

                    <input type="checkbox"
                           name="hobbies"
                           value="Music"
                           <%= hobbies.contains("Music") ? "checked" : "" %>>
                    Music

                    <input type="checkbox"
                           name="hobbies"
                           value="Reading"
                           <%= hobbies.contains("Reading") ? "checked" : "" %>>
                    Reading
                    
                    <input type="checkbox"
                           name="hobbies"
                           value="Gaming"
                           class="ms-3"
                           <%= hobbies.contains("Gaming") ? "checked" : "" %>> 
                    Gaming

                </div>

                <!-- Address -->

                <div class="mb-3">

                    <label>Address</label>

                    <textarea name="address"
                              class="form-control"
                              rows="4"><%= rs.getString("address") %></textarea>

                </div>

                <button type="submit"
                        class="btn btn-primary">
                    Update Student
                </button>

                <a href="index.jsp"
                   class="btn btn-secondary">
                    Back
                </a>

            </form>

        </div>

    </div>

</div>

</body>
</html>

<%
}
%>
