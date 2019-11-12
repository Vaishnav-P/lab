
DECLARE
   n1 INTEGER:=0;
   n2 INTEGER:=1;
   n3 INTEGER:=1;
   n INTEGER;
BEGIN
    n:=&n;
    dbms_output.put_line(n1);
    for i in 1 ..n LOOP
        dbms_output.put_line(n3);
        n3 := n1 + n2;
        n1 := n2;
        n2 := n3;
    END LOOP;
END;
/