/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/JSP_Servlet/Servlet.java to edit this template
 */
package com.servlet;

import jakarta.servlet.ServletException;
import jakarta.servlet.annotation.MultipartConfig;
import jakarta.servlet.annotation.WebServlet;
import jakarta.servlet.http.HttpServlet;
import jakarta.servlet.http.HttpServletRequest;
import jakarta.servlet.http.HttpServletResponse;
import jakarta.servlet.http.Part;

import java.io.File;
import java.io.IOException;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;

@WebServlet("/AddStudentProfileServlet")
@MultipartConfig(
        fileSizeThreshold = 1024 * 1024,
        maxFileSize = 1024 * 1024 * 10,
        maxRequestSize = 1024 * 1024 * 50
)
public class NewServlet extends HttpServlet {

    @Override
    protected void doPost(HttpServletRequest request,
            HttpServletResponse response)
            throws ServletException, IOException {

        try {

            String studentId
                    = request.getParameter("studentId");

            Part filePart
                    = request.getPart("profile");

            String fileName
                    = System.currentTimeMillis()
                    + "_"
                    + filePart.getSubmittedFileName();

            String uploadPath
                    = getServletContext()
                            .getRealPath("/assets/uploads");

            File uploadDir
                    = new File(uploadPath);

            if (!uploadDir.exists()) {
                uploadDir.mkdirs();
            }

            filePart.write(
                    uploadPath
                    + File.separator
                    + fileName
            );

            String imagePath
                    = "assets/uploads/" + fileName;

            Class.forName(
                    "com.mysql.cj.jdbc.Driver"
            );

            Connection con
                    = DriverManager.getConnection(
                            "jdbc:mysql://localhost:3306/jsp_curd_db",
                            "root",
                            ""
                    );

            PreparedStatement ps
                    = con.prepareStatement(
                            "INSERT INTO student_profile(student_id, profile) VALUES (?, ?)"
                    );

            ps.setInt(
                    1,
                    Integer.parseInt(studentId)
            );

            ps.setString(
                    2,
                    imagePath
            );

            ps.executeUpdate();

            ps.close();
            con.close();

            response.sendRedirect(
                    "studentProfile.jsp"
            );

        } catch (Exception e) {

            e.printStackTrace();

            response.getWriter().println(
                    "<h2>Error</h2>"
                    + e.getMessage()
            );
        }
    }
}
