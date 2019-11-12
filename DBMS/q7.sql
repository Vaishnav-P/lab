set serveroutput on;
declare
 product_num varchar(20):='';
 price integer;
 begin
    product_num:=&product_num;
    select cost_price into price from product_master_5252 where product_no like product_num;
    if price>=3000 then
        price := price - 200;
        update product_master_5252 set cost_price = price where product_no like product_num;
        
    end if;
    dbms_output.put_line(price);
EXCEPTION
    when value_error then
        dbms_output.put_line('ERROR: Enter String');
    when no_data_found then
         dbms_output.put_line('ERROR: Product not available');


end;
/