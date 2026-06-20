<%-- 
    Document   : editStudentProfile
    Created on : 12-Jun-2026, 9:44:09 am
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

    PreparedStatement ps = con.prepareStatement(
            "SELECT * FROM student_profile WHERE id=?"
    );

    ps.setInt(1, id);

    ResultSet profileRs = ps.executeQuery();

    if (profileRs.next()) {

        int studentId = profileRs.getInt("student_id");
        String profile = profileRs.getString("profile");
%>

<!DOCTYPE html>
<html>
    <head>
        <title>Edit Student Profile</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
              rel="stylesheet">
    </head>
    <body>

        <div class="container mt-5">

            <div class="card shadow">

                <div class="card-header bg-warning">
                    <h3>Edit Student Profile</h3>
                </div>

                <div class="card-body">
                    <form action="updateStudentProfile" method="post" enctype="multipart/form-data">

                        <input type="hidden"
                               name="id"
                               value="<%= id%>">

                        <!-- Student Dropdown -->

                        <div class="mb-3">

                            <label class="form-label">
                                Student Name
                            </label>

                            <select name="studentId"
                                    class="form-select"
                                    required>

                                <option value="">
                                    Select Student
                                </option>

                                <%
                                    Statement st = con.createStatement();

                                    ResultSet studentRs
                                            = st.executeQuery(
                                                    "SELECT id,name FROM students ORDER BY name"
                                            );

                                    while (studentRs.next()) {
                                %>

                                <option
                                    value="<%= studentRs.getInt("id")%>"

                                    <%= studentRs.getInt("id") == studentId
                                            ? "selected"
                                            : ""%>>

                                    <%= studentRs.getString("name")%>

                                </option>

                                <%
                                    }
                                %>

                            </select>

                        </div>

                        <!-- New Image -->

                        <div class="mb-3">

                            <label>Upload New Image</label>

                            <input type="file"
                                   name="profile"
                                   class="form-control">

                        </div>

                        <!-- Current Image -->

                        <div class="mb-3">

                            <label>Current Image</label>
                            <br>

                            <img src="<%= profile%>"
                                 width="120"
                                 class="img-thumbnail">

                        </div>

                        <button type="submit"
                                class="btn btn-primary">
                            Update
                        </button>

                        <a href="studentProfile.jsp"
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
