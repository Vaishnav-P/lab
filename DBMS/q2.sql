DECLARE
  n1 integer;
  n2 integer;
  n3 integer;
  temp integer;
BEGIN
    n1 :=&n1;
    n2 :=&n2;
    n3 :=&n3;
    if(n1>=n2 and n1>=n3) then
    temp := n1;
    elsif (n2>=n1 and n2>=n3) then
    temp:=n2;
    else
    temp:=n3;
    end if;
    dbms_output.put_line('Greatest is ' ||temp);
END;
/

