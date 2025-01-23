# Write your MySQL query statement below
SELECT u.name,SUM(coalesce(r.distance,0)) as travelled_distance 
FROM Rides r
RIGHT JOIN Users u ON r.user_id = u.id 
GROUP BY user_id 
ORDER BY SUM(coalesce(r.distance,0)) DESC ,u.name ASC
