<%-- 
    Document   : addStudent
    Created on : 07-Jun-2026, 12:24:07 pm
    Author     : ravis
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Add Student</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body class="bg-light">

        <div class="container mt-5">

            <div class="text-center">
                <a href="index.jsp">
                    <img src="<%= "assets/images/student.png" %>" width="50" class="rounded-circle shadow mb-4">
                </a>
            </div>

            <div class="card shadow">

                <div class="card-header bg-success text-white">
                    <h3>Add New Student</h3>
                </div>

                <div class="card-body">

                    <form action="AddStudentServlet.jsp" method="post">

                        <!-- Name -->
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text"
                                   name="name"
                                   class="form-control"
                                   required>
                        </div>

                        <!-- Email -->
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email"
                                   name="email"
                                   class="form-control"
                                   required>
                        </div>

                        <!-- DOB -->
                        <div class="mb-3">
                            <label class="form-label">Date of Birth</label>
                            <input type="date"
                                   name="dob"
                                   class="form-control"
                                   required>
                        </div>

                        <!-- Gender -->
                        <div class="mb-3">
                            <label class="form-label">Gender</label>
                            <br>

                            <input type="radio"
                                   name="gender"
                                   value="Male"
                                   required> Male

                            <input type="radio"
                                   name="gender"
                                   value="Female"
                                   class="ms-3"> Female
                        </div>

                        <!-- Course -->
                        <div class="mb-3">
                            <label class="form-label">Course</label>

                            <select name="course"
                                    class="form-select"
                                    required>

                                <option value="">Select Course</option>
                                <option value="BCA">BCA</option>
                                <option value="BBA">BBA</option>
                                <option value="b.Tech">B.Tech</option>
                                <option value="MCA">MCA</option>
                                <option value="MBA">MBA</option>

                            </select>
                        </div>

                        <!-- Hobbies -->
                        <div class="mb-3">

                            <label class="form-label">Hobbies</label>
                            <br>

                            <input type="checkbox"
                                   name="hobbies"
                                   value="Cricket"> Cricket

                            <input type="checkbox"
                                   name="hobbies"
                                   value="Music"
                                   class="ms-3"> Music

                            <input type="checkbox"
                                   name="hobbies"
                                   value="Reading"
                                   class="ms-3"> Reading

                            <input type="checkbox"
                                   name="hobbies"
                                   value="Gaming"
                                   class="ms-3"> Gaming

                        </div>

                        <!-- Address -->
                        <div class="mb-3">
                            <label class="form-label">Address</label>

                            <textarea name="address"
                                      class="form-control"
                                      rows="4"
                                      required></textarea>
                        </div>

                        <!-- Buttons -->
                        <button type="submit"
                                class="btn btn-success">
                            Save Student
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
