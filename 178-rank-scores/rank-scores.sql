# Write your MySQL query statement below
SELECT s.Score, Dense_Rank() OVER(ORDER BY s.Score DESC) 'Rank' 
FROM Scores s
