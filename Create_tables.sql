CREATE TABLE End_User(
Name 		  varchar(50),
Date_of_birth date,
Age 		  Int,
Location      varchar(50),
House_number  varchar(50),
Email		  varchar(50) PRIMARY KEY,
Password 	  varchar(50) NOT NULL,
Adhaar_number char(12) 	  NOT NULL,
CONSTRAINT Adhaar_uniq UNIQUE (Adhaar_number)
);

CREATE TABLE Phone_Number(
Adhaar_number char(12) ,
Phone_Number  varchar(50) ,
PRIMARY KEY (Adhaar_number, Phone_Number),
FOREIGN KEY (Adhaar_number) REFERENCES End_User(Adhaar_number)
);

CREATE TABLE Grievant(
Adhaar_number char(12) PRIMARY KEY,
Designation   varchar(50),
Department 	  varchar(50),
FOREIGN KEY (Adhaar_number) REFERENCES End_User(Adhaar_number)
);

CREATE TABLE Respondent(
Adhaar_number char(12) PRIMARY KEY,
Working_hours Int DEFAULT 8,
Rating 		  float(3,2) DEFAULT 0.00,
Type 		  varchar(10) NOT NULL,
FOREIGN KEY (Adhaar_number) REFERENCES End_User(Adhaar_number)
);

CREATE TABLE Administrator(
Adhaar_number char(12) PRIMARY KEY,
SUDO_PASSWORD varchar(50) NOT NULL,
FOREIGN KEY (Adhaar_number) REFERENCES End_User(Adhaar_number)
);

CREATE TABLE Complaint(
Complaint_ID   Int PRIMARY KEY AUTO_INCREMENT,
Type 		   ENUM('COUNSELLOR', 'MESS_WORKER', 'RAG_PICKER'),
abscissa       float(8,5)  NOT NULL, #X
ordinate       float(8,5)  NOT NULL, #Y
Location_tag   varchar(50),
Status 		   ENUM('UNRESOLVED', 'RESOLVED') DEFAULT 'UNRESOLVED',
Report 		   varchar(50),
Photo_pointer1 BLOB, #report photo
Photo_pointer2 BLOB, #Resolved photo
Time_stamp1    date,
Time_stamp2    date
);

CREATE TABLE Reports(
Grvnt_Adhaar_number char(12),
Complaint_ID  		Int,
PRIMARY KEY (Grvnt_Adhaar_number, Complaint_ID),
FOREIGN KEY (Grvnt_Adhaar_number) REFERENCES Grievant(Adhaar_number),
FOREIGN KEY (Complaint_ID) 	 	  REFERENCES Complaint(Complaint_ID)
);

CREATE TABLE Resolves(
Resp_Adhaar_number char(12),
Complaint_ID  		Int,
PRIMARY KEY (Resp_Adhaar_number, Complaint_ID),
FOREIGN KEY (Resp_Adhaar_number) REFERENCES Respondent(Adhaar_number),
FOREIGN KEY (Complaint_ID) 	 	 REFERENCES Complaint(Complaint_ID)
);

CREATE TABLE Analyses(
Admn_Adhaar_number char(12),
Complaint_ID  		Int,
PRIMARY KEY (Admn_Adhaar_number, Complaint_ID),
FOREIGN KEY (Admn_Adhaar_number) REFERENCES Administrator(Adhaar_number),
FOREIGN KEY (Complaint_ID) 		 REFERENCES Complaint(Complaint_ID)
);

/*
#signup
#echo mysql_errno($link) . ": " . mysql_error($link). "\n";
CREATE PROCEDURE signup(IN AN char(12), IN EM varchar(50), IN PWD varchar(50))
BEGIN
	INSERT INTO End_User(Adhaar_number, Email, Password) VALUES (AN, EM, PWD);
END 

CREATE PROCEDURE getpwd(IN EM varchar(50), IN PWD varchar(50))
BEGIN
	SELECT * from End_User eu where eu.Email = EM and eu.Password = PWD 
END

*/

#signup
INSERT INTO End_User(Adhaar_number, Email, Password) VALUES ($$$$1, $$$$2, $$$$3);

#login
SELECT * from End_User eu where eu.Email = $$$$1 and eu.Password = $$$$2; 

#Report_complaint
#optional: Location_tag, Report, Photo_pointer1, Time_stamp
INSERT INTO Complaint(Type, abscissa, ordinate, Location_tag, Report, Photo_pointer1, Time_stamp1, Time_stamp2)
	VALUES() ###
C_ID = SELECT LAST_INSERT_ID();
INSERT INTO Reports(Complaint_ID, Grvnt_Adhaar_number)
	VALUES(C_ID, )###

#update end_user 
INSERT INTO End_User(Name, Date_of_birth, Age, Location, House_number)
	VALUES() ###

#add_griev
INSERT INTO Grievant(Adhaar_number, Designation, Department)
	VALUES() ###

#add_resp
INSERT INTO Respondent(Adhaar_number, Working_hours, Rating, Type)
	VALUES() ###

#add_admn
INSERT INTO Administrator(Adhaar_number, SUDO_PASSWORD)
	VALUES() ###

#Grievant->List all Complaints
#change order_by as required
SELECT r.Complaint_ID, c.Status from Reports r Complaint c where r.Grvnt_Adhaar_number = $$$$$ and c.Adhaar_number = r.Grvnt_Adhaar_number 
														   order by Time_stamp desc

#Respondent->Available Complaints
#Resp_Adhaar_number
SELECT c.Complaint_ID, c.Report from Complaint c where c.Type = (SELECT r.Type from Respondent r where r.Adhaar_number = $$$$) and c.Status = 'UNRESOLVED' 
									   #order by Location_tag








