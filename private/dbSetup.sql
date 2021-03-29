
Create table subjects (subID varchar (8) not null primary key, 
	assL varchar (255) not null, 
	readL varchar (255) not null, 
	PYEL varchar (255) not null, 
	insL varchar (255) not null,
	extra varchar (8)
);


Insert into subjects(subID, assL, readL, PYEL, insL, extra) values 
	("CSCI 265", "#link.html", "http://csci.viu.ca/~wesselsd/courses/csci265/references", "http://csci.viu.ca/~wesselsd/courses/csci265/exams/index.html", "https://www2.viu.ca/directory/employeeDetail.aspx?emp=9D0433788926A177", ""),
	 ("CSCI 311", "#link.html", "http://csci.viu.ca/~carruths/Courses/CSCI311/index.html", "http://csci.viu.ca/~carruths/Courses/CSCI311/index.html", "https://www2.viu.ca/directory/employeeDetail.aspx?emp=B92AC9E54569D8C4", ""),
	 ("CSCI 260", "#link.html", "http://csci.viu.ca/~liuh/260/schedule.html", "http://csci.viu.ca/~liuh/260/exams/", "https://www2.viu.ca/directory/employeeDetail.aspx?emp=FD2BCD05DBA3A4F2", "");

