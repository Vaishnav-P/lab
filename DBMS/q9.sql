DECLARE 
   o_id sales_order_5252.order_no%type; 
   odate sales_order_5252.order_date%type;
   clientno sales_order_5252.client_no%type;
   daddrs sales_order_5252.dely_address%type;
   salesman_no sales_order_5252.salesman_no%type;
   dtype sales_order_5252.dely_type%type;
   billed sales_order_5252.billed_yn%type;
   ddate sales_order_5252.dely_date%type;
   stats sales_order_5252.order_status%type;  
   CURSOR c_customers(no varchar) is 
      SELECT * from sales_order_5252 where salesman_no = no; 
BEGIN 
   OPEN c_customers(&saleman_no); 
   LOOP 
   FETCH c_customers into o_id, odate,clientno,daddrs,salesman_no,dtype,billed,ddate,stats; 
      EXIT WHEN c_customers%notfound; 
      dbms_output.put_line(o_id ||'         '||odate||'           '||clientno||'           '||daddrs||'         '||salesman_no||'         '
                                ||dtype||'           '||billed||'            '||ddate||'    '||stats); 
   END LOOP; 
   CLOSE c_customers; 
END; 
/