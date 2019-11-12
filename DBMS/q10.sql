DECLARE 
  -- c_id clientmaster5252.client_no%type; 
  -- names clientmaster5252.name%type;
 --  add1 clientmaster5252.address_1%type;
  -- add2 clientmaster5252.address_2%type;
  -- city clientmaster5252.city%type;
  -- pin clientmaster5252.pin%type;
 --  states clientmaster5252.state%type;
 -- bal clientmaster5252.bal_due%type;
 rowtype clientmaster5252%rowtype;
   CURSOR c_customers(no varchar) is 
      SELECT * from clientmaster5252 where state like no ; 
BEGIN 
   OPEN c_customers(&city); 
   LOOP 
   FETCH c_customers into rowtype; 
      EXIT WHEN c_customers%notfound; 
      dbms_output.put_line(rowtype.client_no ||'         '||rowtype.name||'           '||rowtype.address_1||'           '||rowtype.address_2||'         '||rowtype.city||'         '
                                ||rowtype.pin||'     '||rowtype.state||'    '||rowtype.bal_due); 
   END LOOP; 
   CLOSE c_customers; 
END; 
/