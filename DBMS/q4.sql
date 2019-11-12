declare
    num integer;
    fact integer := 1;
    temp integer;
begin
    num:=&num;
    temp := num;
    while(num>0) loop
    fact:=fact*num;
    num:= num-1;
    end loop;
dbms_output.put_line('Factorial of '|| temp ||' is '||fact);
end;
/