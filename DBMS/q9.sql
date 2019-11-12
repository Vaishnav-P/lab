DECLARE 
  -- o_id sales_order_5252.order_no%type; 
   --odate sales_order_5252.order_date%type;
   --clientno sales_order_5252.client_no%type;
   --daddrs sales_order_5252.dely_address%type;
   --salesman_no sales_order_5252.salesman_no%type;
   --dtype sales_order_5252.dely_type%type;
   --billed sales_order_5252.billed_yn%type;
   --ddate sales_order_5252.dely_date%type;
  -- stats sales_order_5252.order_status%type; 
  rowtype  sales_order_5252%rowtype;
   CURSOR c_customers(no varchar) is 
      SELECT * from sales_order_5252 where salesman_no = no; 
BEGIN 
   OPEN c_customers(&saleman_no); 
   LOOP 
   FETCH c_customers into rowtype;
      EXIT WHEN c_customers%notfound; 
      dbms_output.put_line(rowtype.order_no ||'         '||rowtype.order_date||'           '||rowtype.client_no||'           '||rowtype.dely_address||'         '||rowtype.salesman_no||'         '
                                ||rowtype.dely_type||'           '||rowtype.billed_yn||'            '||rowtype.dely_date||'    '||rowtype.order_status); 
   END LOOP; 
   CLOSE c_customers; 
END; 
/