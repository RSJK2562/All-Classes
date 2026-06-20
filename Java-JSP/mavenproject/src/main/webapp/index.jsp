<%-- 
    Document   : index
    Created on : 07-Jun-2026, 12:26:13 pm
    Author     : ravis
--%>

<%@page import="java.sql.*"%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>JSP CURD - Student Management System</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">

        <div class="container mt-5">

            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">Student Management System</h3>
                </div>

                <div class="card-body">

                    <div class="d-flex justify-content-between mb-3">
                        <h5>Student List</h5>

                        <a href="studentProfile.jsp" class="btn btn-secondary">
                            Student Profile
                        </a>

                        <a href="addStudent.jsp" class="btn btn-success">
                            Add New Student
                        </a>
                    </div>

                    <table class="table table-bordered table-hover table-striped">

                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>DOB</th>
                                <th>Gender</th>
                                <th>Course</th>
                                <th>Hobbies</th>
                                <th>Address</th>
                                <th width="150">Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <%
                                try {

                                    Class.forName("com.mysql.cj.jdbc.Driver");

                                    Connection con
                                            = DriverManager.getConnection(
                                                    "jdbc:mysql://localhost:3306/jsp_curd_db",
                                                    "root",
                                                    ""
                                            );

                                    Statement st = con.createStatement();

                                    ResultSet rs
                                            = st.executeQuery("SELECT * FROM students");
                                    int i = 1;

                                    while (rs.next()) {
                            %>


                            <tr>

                                <td><%= i++%></td>
                                <!--<td><%= rs.getInt("id")%></td>-->

                                <td><%= rs.getString("name")%></td>

                                <td><%= rs.getString("email")%></td>

                                <td><%= rs.getString("dob")%></td>

                                <td><%= rs.getString("gender")%></td>

                                <td><%= rs.getString("course")%></td>

                                <td><%= rs.getString("hobbies")%></td>

                                <td><%= rs.getString("address")%></td>

                                <td>

                                    <a href="editStudent.jsp?id=<%= rs.getInt("id")%>"
                                       class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <a href="deleteStudent.jsp?id=<%= rs.getInt("id")%>"
                                       class="btn btn-danger btn-sm"
                                       onclick="return confirm('Are you sure you want to delete this student?')">
                                        Delete
                                    </a>

                                </td>

                            </tr>

                            <%
                                    }

                                    rs.close();
                                    st.close();
                                    con.close();

                                } catch (Exception e) {

                                    out.println(e);

                                }
                            %>

                        </tbody>

                    </table>
                </div>
            </div>

        </div>

    </body>
</html>
