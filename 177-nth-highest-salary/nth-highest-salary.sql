CREATE FUNCTION getNthHighestSalary(N INT) RETURNS INT
BEGIN
    SET  N = N - 1;
  RETURN (
      SELECT distinct(Salary) FROM Employee
      ORDER BY Salary DESC
      LIMIT 1 OFFSET N
  );
END