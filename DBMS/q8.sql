DECLARE 
   p_id product_master_5252.product_no%type; 
   descr product_master_5252.description%type;
   profit product_master_5252.profit_percent%type;
   unit product_master_5252.unit_measure%type;
   qty product_master_5252.qty_on_hand%type;
   reorder product_master_5252.reorder_lvl%type;
   sell product_master_5252.sell_price%type;
   cost product_master_5252.cost_price%type;  
   CURSOR c_customers is 
      SELECT * from product_master_5252; 
BEGIN 
   OPEN c_customers; 
   LOOP 
   FETCH c_customers into p_id, descr,profit,unit,qty,reorder,sell,cost; 
      EXIT WHEN c_customers%notfound; 
      dbms_output.put_line(p_id ||'         '||descr||'           '||profit||'           '||unit||'         '||qty||'         '
                                ||reorder||'           '||sell||'            '||cost); 
   END LOOP; 
   CLOSE c_customers; 
END; 
/