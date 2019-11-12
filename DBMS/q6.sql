set serveroutput on;
declare
num integer;
digit integer;
rev integer:=0;
begin
num:=&num;
while(num!=0) loop
digit:= num mod 10;
rev:=(rev*10)+digit;
num:=trunc(num/10);
end loop;
dbms_output.put_line('Reverse = '|| rev);
end;
/
