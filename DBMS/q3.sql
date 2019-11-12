declare
    num integer;
    summ integer;
    a integer;
    b integer;
begin
    summ:=0;
    a:=1;
    b:=1;
    num := &num;
    while(b <=num) loop
    summ:=summ+a;
    a:= a+2;
    b:=b+1;
    end loop;
    dbms_output.put_line('sum of '|| num || ' odd number is ' || summ);
end;
/