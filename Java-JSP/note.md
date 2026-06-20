JAVA - JSP - CURD
-----------------

Step 1: JDK Install Karo
https://www.oracle.com/java/technologies/downloads/?utm_source=chatgpt.com#jdk21-windows
--------------
java -version
javac -version


Step 2: NetBeans Download aur Install Karo
https://netbeans.apache.org/front/main/download/nb23/


Step 3: Apache Tomcat Install Karo
https://tomcat.apache.org/?utm_source=chatgpt.com
https://tomcat.apache.org/download-10.cgi


Step 4: Tomcat NetBeans Me Add Karo


Step 5: NetBeans Me First Web Project Banao

File
 → New Project
 → Java with Maven
 → Web Application


Step 6: MySQL Connector Dependency (Maven)

pom.xml me add karo:
<dependency>
    <groupId>com.mysql</groupId>
    <artifactId>mysql-connector-j</artifactId>
    <version>9.3.0</version>
</dependency>

Note: 
Right Click Project
→ Clean and Build



------------------------------------------------------

Student Module

1. Create index.jsp
	View Student List

2. Create addStudent.jsp
	Create Student
3. AddStudentServlet.jsp
	Save Student data in database
4. Create Edit Student
5. Create Delete Student




Student Profile Module

1. Create studentProfile.jsp	
	Show All Student with profile
2. Create addStudentProfile.jsp
	Show added students in drop-down and store in database
3. Create AddStudentProfileServlet
	Step 1
		Create Java Servlet
			Source Packages
			→ New
			→ Servlet
			Name:
			NewServlet (AddStudentProfileServlet)
4. Create editStudentProfile.jsp
5. Create Servlet updateStudentProfile
6. Create deleteStudentProfile.jsp

