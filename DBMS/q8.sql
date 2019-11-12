DECLARE 
  -- p_id product_master_5252.product_no%type; 
 --  descr product_master_5252.description%type;
  -- profit product_master_5252.profit_percent%type;
 --  unit product_master_5252.unit_measure%type;
  -- qty product_master_5252.qty_on_hand%type;
  -- reorder product_master_5252.reorder_lvl%type;
  -- sell product_master_5252.sell_price%type;
   --cost product_master_5252.cost_price%type;
   rowtype product_master_5252%rowtype;  
   CURSOR c_customers is 
      SELECT * from product_master_5252; 
BEGIN 
   OPEN c_customers; 
   LOOP 
   FETCH c_customers into rowtype; 
      EXIT WHEN c_customers%notfound; 
      dbms_output.put_line(rowtype.product_no||'         '||rowtype.description||'           '||rowtype.profit_percent||'           '||rowtype.unit_measure||'         '||rowtype.qty_on_hand||'         '
                                ||rowtype.reorder_lvl||'           '||rowtype.sell_price||'            '||rowtype.cost_price); 
   END LOOP; 
   CLOSE c_customers; 
END; 
/