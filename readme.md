
select(('')#columnname(or in array), ('')#tablename, ('')#condition(or in array), #connection) => select #columnname from #tablename where condition

emptty($var) => empty($var);

is__array($var) => is_array($var);

sanitize($input, $con) => mysqli_real_escape_string($con, $input);

execute_query($query, $con) => mysqli_query($link, $query);

get_array_from_object($result) => mysqli_fetch_array($result, MYSQLI_ASSOC);

db_connect() => connecting the db

