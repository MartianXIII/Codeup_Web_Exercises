<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1> MYSQL - BoilerQueries </h1>

    <p>
      <strong>Connect/Disconnect</strong>
        mysql -h <host> -u <user> -p<passwd>
        mysql -h <host> -u <user> -p
        Enter password: ********
        mysql -u user -p
        mysql
        mysql -h <host> -u <user> -p <Database>
    </p>
  </body>
</html>

mysql -h <host> -u <user> -p<passwd>




  -- MYSQL-BOILER QUERIES

  SELECT * FROM table
  SELECT * FROM table1, table2, ...
  SELECT field1, field2, ... FROM table1, table2, ...

  SELECT ... FROM ... WHERE condition
  SELECT ... FROM ... WHERE condition GROUP BY field
  SELECT ... FROM ... WHERE condition GROUP BY field HAVING condition2
  SELECT ... FROM ... WHERE condition ORDER BY field1, field2
  SELECT ... FROM ... WHERE condition ORDER BY field1, field2 DESC
  SELECT ... FROM ... WHERE condition LIMIT 10

  SELECT DISTINCT field1 FROM ...
  SELECT DISTINCT field1, field2 FROM ...

  SELECT ... FROM t1 JOIN t2 ON t1.id1 = t2.id2 WHERE condition
  SELECT ... FROM t1 LEFT JOIN t2 ON t1.id1 = t2.id2 WHERE condition
  SELECT ... FROM t1 JOIN (t2 JOIN t3 ON ...) ON ...
  SELECT ... FROM t1 JOIN t2 USING(id) WHERE condition
