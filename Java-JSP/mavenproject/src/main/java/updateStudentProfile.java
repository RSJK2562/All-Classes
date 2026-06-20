/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/JSP_Servlet/Servlet.java to edit this template
 */

package com.servlet;

import jakarta.servlet.annotation.MultipartConfig;
import jakarta.servlet.annotation.WebServlet;
import jakarta.servlet.http.*;

import java.io.File;
import java.io.IOException;
import java.sql.*;

@WebServlet("/updateStudentProfile")
@MultipartConfig
public class updateStudentProfile extends HttpServlet {

    @Override
    protected void doPost(HttpServletRequest request,
                          HttpServletResponse response)
            throws IOException {

        try {

            int id = Integer.parseInt(
                    request.getParameter("id")
            );

            String oldProfile =
                    request.getParameter("oldProfile");

            Part filePart =
                    request.getPart("profile");

            String imagePath = oldProfile;

            if(filePart != null
                    && filePart.getSize() > 0){

                String fileName =
                        System.currentTimeMillis()
                        + "_"
                        + filePart.getSubmittedFileName();

                String uploadPath =
                        getServletContext()
                        .getRealPath("/assets/uploads");

                File dir = new File(uploadPath);

                if(!dir.exists()){
                    dir.mkdirs();
                }

                filePart.write(
                        uploadPath
                        + File.separator
                        + fileName
                );

                imagePath =
                        "assets/uploads/"
                        + fileName;
            }

            Class.forName(
                    "com.mysql.cj.jdbc.Driver"
            );

            Connection con =
                    DriverManager.getConnection(
                            "jdbc:mysql://localhost:3306/jsp_curd_db",
                            "root",
                            ""
                    );

            PreparedStatement ps =
                    con.prepareStatement(
                            "UPDATE student_profile "
                            + "SET profile=? "
                            + "WHERE id=?"
                    );

            ps.setString(1, imagePath);
            ps.setInt(2, id);

            ps.executeUpdate();

            response.sendRedirect(
                    "studentProfile.jsp"
            );

        } catch(Exception e){

            e.printStackTrace();

            response.getWriter().println(
                    e.getMessage()
            );
        }
    }
}