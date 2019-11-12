
   /* 1A */	

SQL> CREATE TABLE CLIENT_MASTER_5252(CLIENT_NO VARCHAR(10) PRIMARY KEY CHECK(CLIENT_NO LIKE'C%'),
					NAME VARCHAR(30) NOT NULL,ADDRESS_1 VARCHAR(30),
					ADDRESS_2 VARCHAR(30),
					CITY VARCHAR(30),
					PIN INT,
					STATE VARCHAR(20),
					BAL_DUE FLOAT);

Table created.

SQL> CREATE TABLE PRODUCT_MASTER_5252(PRODUCT_NO VARCHAR(10) PRIMARY KEY CHECK(PRODUCT_NO LIKE 'P%'),
					DESCRIPTION VARCHAR(20) NOT NULL,
					PROFIT_PERCENT FLOAT,
					UNIT_MEASURE VARCHAR(20),
					QTY_ON_HAND INT,
					REORDER_LVL INT,
					SELL_PRICE INT,
					COST_PRICE INT);

Table created.

SQL> CREATE TABLE SALESMAN_MASTER_5252(SALESMAN_NO VARCHAR(10) PRIMARY KEY CHECK(SALESMAN_NO LIKE 'S%'),
					SALESMAN_NAME VARCHAR(20) NOT NULL,ADDRESS_1 VARCHAR(10) NOT NULL,
					CITY VARCHAR(20),
					PIN INT,
					STATE VARCHAR(20),
					SAL_AMT FLOAT NOT NULL CHECK(SAL_AMT>0),
					TGT_TO_GET INT NOT NULL CHECK(TGT_TO_GET>0),
					TTD_SALES INT  NOT NULL,REMARKS VARCHAR(10));

Table created.

SQL> CREATE TABLE SALES_ORDER_5252(ORDER_NO VARCHAR(10) PRIMARY KEY CHECK(ORDER_NO LIKE 'O%'),
				ORDER_DATE DATE,CLIENT_NO VARCHAR(10),
				DELY_ADDRESS VARCHAR(10),SALESMAN_NO VARCHAR(10),
				DELY_TYPE CHAR(1) DEFAULT 'F',
				BILLED_YN CHAR(1),
				DELY_DATE DATE,
				ORDER_STATUS VARCHAR(15) CHECK(ORDER_STATUS IN ('IN PROCESS','FULFILLED','BACKORDER','CANCELLED')), 
				FOREIGN KEY(CLIENT_NO) REFERENCES CLIENT_MASTER_5252(CLIENT_NO));

Table created.

SQL> CREATE TABLE SALES_ORDER_DETAILS_5252(ORDER_NO VARCHAR(10),
				FOREIGN KEY(ORDER_NO) REFERENCES SALES_ORDER_5252(ORDER_NO),
				PRODUCT_NO VARCHAR(10),
				FOREIGN KEY(PRODUCT_NO) REFERENCES PRODUCT_MASTER_5252(PRODUCT_NO),
				QTY_ORDERED INT,
				QTY_NUMBER INT,PRODUCT_RATE INT);

Table created.


/*1B*/

SQL> RENAME CLIENT_MASTER_5252 TO CLIENTMASTER5252;

Table renamed.


/*1C*/

SQL> ALTER TABLE SALES_ORDER_5252 ADD CONSTRAINT ODATE CHECK(ORDER_DATE<DELY_DATE);

Table altered.

/*1D*/

ALTER TABLE PRODUCT_MASTER_5252 ADD CONSTRAINT PCOST CHECK(COST_PRICE>0);

Table altered.

/*1E*/

SQL> ALTER TABLE PRODUCT_MASTER_5252 MODIFY COST_PRICE INT NOT NULL;

Table altered.


/*1F*/

SQL> ALTER TABLE PRODUCT_MASTER_5252 ADD CONSTRAINT SCOST CHECK(SELL_PRICE>0);

Table altered.

_______________________________________________________________________________________________________________________________________________________________________

/* 2 */

INSERT INTO CLIENT_MASTER_5252 VALUES('C00001','IVAN BAYROSS','WANDON','WORLI','MUMBAI','450005','MAHARASHTRA',15000);
	
INSERT INTO CLIENT_MASTER_5252 VALUES('C00002','VANDANA	 SAITWA','DON STREET','BANDRA','MADRAS','780001','TAMILNADU',0);

INSERT INTO CLIENT_MASTER_5252 VALUES('C00003','PRAMADAJAGUST','MANDON','DADAR','MUMBAI','450007','MAHARASHTRA',5000);

INSERT INTO CLIENT_MASTER_5252 VALUES('C00004','BASU NAVINDGI','JEROME','JUHU','MUMBAI','450009','MAHARASHTRA',0);

INSERT INTO CLIENT_MASTER_5252 VALUES('C00005','RAVISREEDHARN','DADAR','DADRA','DELHI','100003','DELHI',2000);


INSERT INTO CLIENT_MASTER_5252 VALUES('C00006','RUKMINI','ROURK','BANDRA','MUMBAI','450002','MAHARASHTRA',15000);



INSERT INTO PRODUCT_MASTER_5252 VALUES('P00001','1.44 FLOPPIES',5 ,'PIECE',100,20,525,500);

INSERT INTO PRODUCT_MASTER_5252 VALUES('P03453','MONITOR',6 ,'PIECE',10,3,12000,11280);

INSERT INTO PRODUCT_MASTER_5252 VALUES('P45789','MOUSE',5 ,'PIECE',20,5,1050,1000);

INSERT INTO PRODUCT_MASTER_5252 VALUES('P44783','KEYBOARDS',5 ,'PIECE',100,20,3150,3050);

INSERT INTO PRODUCT_MASTER_5252 VALUES('P45123','CD DRIVE', 2 ,'PIECE',10,3,5250,5100);

INSERT INTO PRODUCT_MASTER_5252 VALUES('P35412','540 HDD',2.5 ,'PIECE',10,3,8400,8000);



INSERT INTO SALESMAN_MASTER_5252 VALUES('S00001','KIRAN','A/14' ,'WORLI',450001,'BOMBAY',3000,100,50,'GOOD');

INSERT INTO SALESMAN_MASTER_5252 VALUES('S00002','MANEESH','J-65' ,'NARIMAN',450001,'BOMBAY',3000,200,100,'GOOD');

INSERT INTO SALESMAN_MASTER_5252 VALUES('S00003','RAVI','P-7' ,'BANDRA',450003,'BOMBAY',3000,200,100,'GOOD');

INSERT INTO SALESMAN_MASTER_5252 VALUES('S00004','ASHISH','A/5' ,'JUHU',450041,'BOMBAY',3000,200,150,'GOOD');

INSERT INTO SALES_ORDER_5252 VALUES('O19001',TO_DATE('1996-01-12','YYYY-MM-DD'),'C00001' ,'WANDON','S00001','F','N',TO_DATE('1996-01-20','YYYY-MM-DD'),'IN PROCESS');


INSERT INTO SALES_ORDER_5252 VALUES('O19002',TO_DATE('1996-01-25','YYYY-MM-DD'),'C00002' ,'DON STREET','S00002','P','N',TO_DATE('1996-01-27','YYYY-MM-DD'),'CANCELLED');

INSERT INTO SALES_ORDER_5252 VALUES('O46865',TO_DATE('1996-02-18','YYYY-MM-DD'),'C00003' ,'MANDON','S00003','F','Y',TO_DATE('1996-02-20','YYYY-MM-DD'),'FULFILLED');

INSERT INTO SALES_ORDER_5252 VALUES('O19003',TO_DATE('1996-04-03','YYYY-MM-DD'),'C00001' ,'JEROME','S00001','F','Y',TO_DATE('1996-04-07','YYYY-MM-DD'),'FULFILLED');

INSERT INTO SALES_ORDER_5252 VALUES('O46866',TO_DATE('1996-05-20','YYYY-MM-DD'),'C00004' ,'DADAR','S00002','P','N',TO_DATE('1996-05-22','YYYY-MM-DD'),'CANCELLED');

INSERT INTO SALES_ORDER_5252 VALUES('O19008',TO_DATE('1996-05-24','YYYY-MM-DD'),'C00005' ,'ROURK','S00004','F','N',TO_DATE('1996-05-26','YYYY-MM-DD'),'IN PROCESS');



INSERT INTO SALES_ORDER_DETAILS_5252 VALUES('O19001','P00001',4,4,525);

INSERT INTO SALES_ORDER_DETAILS_5252 VALUES('O19002','P00001',10,0,525);

INSERT INTO SALES_ORDER_DETAILS_5252 VALUES('O46865','P00001',10,10,525);

INSERT INTO SALES_ORDER_DETAILS_5252 VALUES('O46865','P03453',4,4,1050);

INSERT INTO SALES_ORDER_DETAILS_5252 VALUES('O19003','P03453',2,2,1050);

INSERT INTO SALES_ORDER_DETAILS_5252 VALUES('O19008','P00001',10,5,525);


_______________________________________________________________________________________________________________________________________________________________________

/* 3A */


SELECT SALESMAN_NAME FROM SALESMAN_MASTER_5252 WHERE SALESMAN_NAME LIKE '_A%';

SALESMAN_NAME
--------------------
MANEESH
RAVI

/* 3B */

SQL> SELECT NAME FROM CLIENTMASTER5252 WHERE NAME LIKE 'R%' AND CITY LIKE 'DELHI';

NAME
------------------------------
RAVISREEDHARN

/* 3C */

SQL> SELECT NAME,ADDRESS_1,ADDRESS_2 FROM CLIENTMASTER5252 WHERE STATE IN('DELHI','MAHARASHTRA');

NAME			       ADDRESS_1		      ADDRESS_2
------------------------------ ------------------------------ ------------------------------
IVAN BAYROSS		       WANDON			      WORLI
PRAMADAJAGUST		       MANDON			      DADAR
BASU NAVINDGI		       JEROME			      JUHU
RAVISREEDHARN		       DADAR			      DADRA
RUKMINI 		       ROURK			      BANDRA


/* 3D */

SQL> SELECT * FROM PRODUCT_MASTER_5252 WHERE COST_PRICE>5000;

PRODUCT_NO DESCRIPTION		PROFIT_PERCENT UNIT_MEASURE	    QTY_ON_HAND REORDER_LVL SELL_PRICE COST_PRICE
---------- -------------------- -------------- -------------------- ----------- ----------- ---------- ----------
P03453	   MONITOR			     6 PIECE			     10 	  3	 12000	    11280
P45123	   CD DRIVE			     2 PIECE			     10 	  3	  5250	     5100
P35412	   540 HDD			   2.5 PIECE			     10 	  3	  8400	     8000


/* 3E */

SQL> SELECT * FROM SALES_ORDER_5252 WHERE EXTRACT(MONTH FROM ORDER_DATE)=5;

ORDER_NO   ORDER_DAT CLIENT_NO	DELY_ADDRE SALESMAN_N D B DELY_DATE ORDER_STATUS
---------- --------- ---------- ---------- ---------- - - --------- ---------------
O46866	   20-MAY-96 C00004	DADAR	   S00002     P N 22-MAY-96 CANCELLED
O19008	   24-MAY-96 C00005	ROURK	   S00004     F N 26-MAY-96 IN PROCESS


/* 3F */

SQL> SELECT * FROM SALESMAN_MASTER_5252 WHERE SALESMAN_NO LIKE 'S00001' OR SALESMAN_NO LIKE'S00002';

SALESMAN_N SALESMAN_NAME	ADDRESS_1  CITY 		       PIN STATE		   SAL_AMT TGT_TO_GET  TTD_SALES REMARKS
---------- -------------------- ---------- -------------------- ---------- -------------------- ---------- ---------- ---------- ----------
S00001	   KIRAN		A/14	   WORLI		    450001 BOMBAY		      3000	  100	      50 GOOD
S00002	   MANEESH		J-65	   NARIMAN		    450001 BOMBAY		      3000	  200	     100 GOOD

/* 3G */

SQL> SELECT * FROM PRODUCT_MASTER_5252 WHERE SELL_PRICE>2000 AND SELL_PRICE<=5000;

PRODUCT_NO DESCRIPTION		PROFIT_PERCENT UNIT_MEASURE	    QTY_ON_HAND REORDER_LVL SELL_PRICE COST_PRICE
---------- -------------------- -------------- -------------------- ----------- ----------- ---------- ----------
P44783	   KEYBOARDS			     5 PIECE			    100 	 20	  3150	     3050


/* 3H */

SQL> SELECT DESCRIPTION, SELL_PRICE*0.20 "NEW_PRICE" FROM PRODUCT_MASTER_5252 WHERE SELL_PRICE > 3000;

DESCRIPTION	      NEW_PRICE
-------------------- ----------
MONITOR 		   2400
KEYBOARDS		    630
CD DRIVE		   1050
540 HDD 		   1680

/* 3I */

SQL> SELECT COUNT(PRODUCT_NO) FROM PRODUCT_MASTER_5252;

COUNT(PRODUCT_NO)
-----------------
6

/* 3J */


SQL> SELECT COUNT(ORDER_STATUS) FROM SALES_ORDER_5252 WHERE ORDER_STATUS LIKE'FULFILLED';

COUNT(ORDER_STATUS)
-------------------
		  2

/* 3K */


SQL> SELECT AVG(SELL_PRICE),AVG(COST_PRICE) FROM PRODUCT_MASTER_5252;

AVG(SELL_PRICE) AVG(COST_PRICE)
--------------- ---------------
	 5062.5      4821.66667


_________________________________________________________________________________________________________________________________________________________________________

/* 4A */

SQL> SELECT ORDER_NO, TO_CHAR(order_date,'day') FROM SALES_ORDER_5252;

ORDER_NO   EXTRACT(DAYFROMORDER_DATE)
---------- --------------------------
O19001				   12
O19002				   25
O46865				   18
O19003				    3
O46866				   20
O19008				   24


/* 4B */


SQL> SELECT TO_CHAR(DELY_DATE,'month'),Dely_date FROM SALES_ORDER_5252;

TO_CHAR(D DELY_DATE
--------- ---------
january   20-JAN-96
january   27-JAN-96
february  20-FEB-96
april	  07-APR-96
may	  22-MAY-96
may	  26-MAY-96

6 rows selected.

/* 4C */

SQL> SELECT TO_CHAR(ORDER_DATE,'DD/MONTH/YY') FROM SALES_ORDER_5252;

TO_CHAR(ORDER_D
---------------
12/JANUARY  /96
25/JANUARY  /96
18/FEBRUARY /96
03/APRIL    /96
20/MAY	    /96
24/MAY	    /96

6 rows selected.

/* 4D */

SQL> SELECT SYSDATE + 15 AS "+15 DAYS" FROM DUAL;

+15 DAYS
---------
20-SEP-19

/* 4E */

SQL> SELECT ORDER_NO,DELY_DATE - ORDER_DATE AS "DAYS ELAPSED" FROM SALES_ORDER_5252;

ORDER_NO   DAYS ELAPSED
---------- ------------
O19001		      8
O19002		      2
O46865		      2
O19003		      4
O46866		      2
O19008		      2

6 rows selected.

____________________________________________________________________________________________________________________________________________________________________

/* 5 */

SQL> create table itemorder_5252(customer_name varchar(15),address varchar(10),item varchar(15),price int);

Table created.


SQL> insert into itemorder_5252 values('Basu','Worli','Monitor',1000);

1 row created.


insert into itemorder_5252 values('Ivan','Juhu','Keyboard',800);

insert into itemorder_5252 values('Ivan','Worli','Printer',1500);

insert into itemorder_5252 values('Bayross','Wandon','Printer',1500);

insert into itemorder_5252 values('Basu','Dadar','Mouse',500);

insert into itemorder_5252 values('Vandana','Wandon','Monitor',1000);

insert into itemorder_5252 values('Vandana','Wandon','Keyboard',800);

insert into itemorder_5252 values('Bayross','Juhu','Mouse',500);


/* 5A */

SQL> select item,sum(price) from itemorder_5252 group by item;

ITEM		SUM(PRICE)
--------------- ----------
Printer 	      3000
Mouse		      1000
Keyboard	      1600
Monitor 	      2000


/* 5B */

SQL> select  customer_name,item from itemorder_5252 order by customer_name;

CUSTOMER_NAME	ITEM
--------------- ---------------
Basu		Monitor
Basu		Mouse
Bayross 	Printer
Bayross 	Mouse
Ivan		Keyboard
Ivan		Printer
Vandana 	Monitor
Vandana 	Keyboard

8 rows selected.


/* 5C */

SQL> select item , address from itemorder_5252 order by address;

ITEM		ADDRESS
--------------- ----------
Mouse		Dadar
Keyboard	Juhu
Mouse		Juhu
Printer 	Wandon
Monitor 	Wandon
Keyboard	Wandon
Printer 	Worli
Monitor 	Worli

8 rows selected.


 /* 5D */

SQL> select customer_name, sum(price) from itemorder_5252 group by customer_name having sum(price)>200;

CUSTOMER_NAME	SUM(PRICE)
--------------- ----------
Vandana 	      1800
Ivan		      2300
Bayross 	      2000
Basu		      1500

________________________________________________________________________________________________

/* 6A */


SQL> select name,address_1,address_2, city,pin from clientmaster5252 where client_no like (select client_no from sales_order_5252 where order_no like 'O19001');

NAME			       ADDRESS_1		      ADDRESS_2 		     CITY				   PIN
------------------------------ ------------------------------ ------------------------------ ------------------------------ ----------
IVAN BAYROSS		       WANDON			      WORLI			     MUMBAI				450005


/* 6B */

SQL> select distinct name from clientmaster5252 a ,sales_order_5252 b where a.client_no = b.client_no and order_date < '01-may-96';

NAME
------------------------------
VANDANA SAITWA
IVAN BAYROSS
PRAMADAJAGUST

/* 6C */

SQL> select name, client_no from clientmaster5252 where client_no in(select client_no from sales_order_5252 where order_no in (select order_no from sales_order_details_5252 where product_no like (select product_no from product_master_5252 where  description like '1.44 FLOPPIES')));  

NAME			       CLIENT_NO
------------------------------ ----------
IVAN BAYROSS		       C00001
PRAMADAJAGUST		       C00003
VANDANA SAITWA		       C00002
RAVISREEDHARN		       C00005

/* 6D */

SQL> select product_no , description from product_master_5252 where product_no not in(select product_no from sales_order_details_5252);

PRODUCT_NO DESCRIPTION
---------- --------------------
P35412	   540 HDD
P44783	   KEYBOARDS
P45123	   CD DRIVE
P45789	   MOUSE

/* 6E */

SQL> select name from clientmaster5252 where client_no in(select client_no from sales_order_5252 where order_no in(select order_no from sales_order_details_5252 where (qty_ordered * product_rate) >= 1000));

NAME
------------------------------
IVAN BAYROSS
VANDANA SAITWA
PRAMADAJAGUST
Vasu



/* 7A */

SQL> create view client_view_5252 as select client_no,name,city from clientmaster5252;

View created.


/* 7B */

SQL> update client_view_5252 set client_no = 'C000010' where name like 'RUKMINI';

1 row updated.


SQL> update client_view_5252 set name = 'Vasu' where client_no like 'C00005';

1 row updated.


SQL> select * from client_view_5252;

CLIENT_NO  NAME 			  CITY
---------- ------------------------------ ------------------------------
C00001	   IVAN BAYROSS 		  MUMBAI
C00002	   VANDANA SAITWA		  MADRAS
C00003	   PRAMADAJAGUST		  MUMBAI
C00004	   BASU NAVINDGI		  MUMBAI
C00005	   Vasu 			  DELHI
C000010    RUKMINI			  MUMBAI

6 rows selected.








