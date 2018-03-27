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
Type 		  ENUM('COUNSELLOR', 'MESS_WORKER', 'RAG_PICKER'),
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
abscissa       float(8,5)  NOT NULL, 
ordinate       float(8,5)  NOT NULL, 
Location_tag   varchar(50),
Status 		   ENUM('UNRESOLVED', 'RESOLVED', 'PROCESSING') DEFAULT 'UNRESOLVED',
Report 		   varchar(500),
Photo_pointer1 longblob, #report photo
Photo_pointer2 longblob, #Resolved photo
Time_stamp1    date,
Time_stamp2    date,
Rating 		  float(3,2) DEFAULT 0.00
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

#sudo
insert into End_User(Email,Password,Adhaar_number) values('sudo@','sudo','999999999999');
insert into Administrator values('999999999999','sudo');

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
INSERT INTO End_User(Adhaar_number,Name, Email, Password) VALUES ($$$$1, $$$$4, $$$$2, $$$$3);

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
UPDATE End_User SET Name = $$$$, Date_of_birth = $$$$, Age=$$$$, Location=$$$$, House_number = $$$$
	WHERE Adhaar_number = $$$$

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
SELECT r.Complaint_ID, c.Status from Reports r Complaint c where r.Grvnt_Adhaar_number = $$$$$ and c.Complaint_ID = r.Complaint_ID 
														   order by Time_stamp desc

#Respondent->Available Complaints
#Resp_Adhaar_number
SELECT c.Complaint_ID, c.Report from Complaint c where c.Type = (SELECT r.Type from Respondent r where r.Adhaar_number = $$$$) and c.Status = 'UNRESOLVED' 
									   #order by Location_tag





#Resolved for a Grievant
SELECT r.Complaint_ID from Resolves r, Complaint c where r.Resp_Adhaar_number = $$$$ and r.Complaint_ID  = c.Complaint_ID and c.Status = 'RESOLVED'

#PROCESSING for a Grievant
SELECT r.Complaint_ID from Resolves r, Complaint c where r.Resp_Adhaar_number = $$$$ and r.Complaint_ID  = c.Complaint_ID and c.Status = 'PROCESSING'

#best 5(N) of all
#change $$$$ to required type of Respondent
SELECT r.Resp_Adhaar_number as RAN, count(*)
    FROM Resolves r,Complaint c
    WHERE r.Complaint_ID = c.Complaint_ID and c.Type = $$$$
    GROUP BY RAN
    ORDER BY count(*) DESC
    LIMIT 5

#all types of Respondents top 5(N) users
SELECT r.Resp_Adhaar_number as RAN, count(*)
    FROM Resolves r,Complaint c
    WHERE r.Complaint_ID = c.Complaint_ID
    GROUP BY RAN
    ORDER BY count(*) DESC
    LIMIT 5

#admn
SELECT r.Resp_Adhaar_number, c.Type, CONCAT(YEAR(c.Time_stamp2), '/', WEEK(c.Time_stamp2)) as week_name, COUNT(*), resp.Rating 
	from Resolves r, Complaint c, Respondent resp 
	where r.Resp_Adhaar_number = resp.Adhaar_number and r.Complaint_ID = c.Complaint_ID 
	GROUP BY r.Resp_Adhaar_number,c.Type, resp.Rating, week_name
	ORDER BY week_name DESC

#rate_update
UPDATE Respondent SET Rating = $$$$ WHERE Adhaar_number = $$$$;



 
/*
drop table Resolves;
drop table Reports;
drop table Phone_Number;
drop table Analyses;
drop table Complaint;
drop table Administrator;
drop table Grievant;
drop table Respondent;
drop table End_User;

*/










