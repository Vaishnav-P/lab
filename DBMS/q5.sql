set serveroutput on;
declare
 str varchar(20);
 len number;
 strrev varchar(20);
 begin
  str:=&str;
  strrev:='';
  len:= length(str);
  for i in REVERSE 1..len loop
  strrev:=strrev ||substr(str,i,1);
  end loop;
  dbms_output.put_line('String In Reverse: '|| strrev);
  end;
  /