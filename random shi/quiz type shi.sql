*Write SQL statements using aggregate functions. Do not use SELECT * .

Find the total number of professors in the database.

SELECT count(prof_id) as total_profs FROM professors


Calculate the average salary of all professors.

SELECT avg(salary) as ave_salary from professors


Find the highest enrollment among all courses.

SELECT max(enrollment) as max_enrollment, course_name  from courses 


Get the total number of credits offered by each department.

SELECT sum(c.credits), d.dept_name
FROM courses c 
INNER JOIN professors p ON c.prof_id=p.prof_id
INNER JOIN departments d ON d.dept_id=p.dept_id
GROUP BY d.dept_id 

Find the department with the lowest average professor salary.

SELECT avg(p.salary) as 'average salary', d.dept_name
FROM professors p 
INNER JOIN departments d ON d.dept_id=p.dept_id
GROUP BY d.dept_name, d.dept_id
ORDER BY avg(p.salary) ASC
LIMIT 1;

Calculate the total enrollment across all courses taught by Computer Science professors.

SELECT sum(c.enrollment), p.prof_name
FROM courses c
INNER JOIN professors p ON p.prof_id=c.prof_id
INNER JOIN departments d ON d.dept_id=p.dept_id
WHERE d.dept_id = 1
GROUP BY p.prof_id, p.prof_name



Find the professor who teaches the most total credits (sum of credits for all their courses).

SELECT sum(c.credits) as 'total credits', p.prof_name
FROM courses c
INNER JOIN professors p ON p.prof_id = c.prof_id
GROUP BY p.prof_id, p.prof_name 
ORDER BY sum(c.credits) DESC
LIMIT 1;


Get the number of courses and average enrollment for each department.

SELECT count(c.course_id), avg(c.enrollment), d.dept_name
FROM courses c
INNER JOIN professors p ON c.prof_id = p.prof_id
INNER JOIN departments d ON p.dept_id = d.dept_id
GROUP BY d.dept_name, d.dept_id

Find departments where the average course enrollment is greater than 40.

SELECT avg(c.enrollment), d.dept_name
FROM courses c
INNER JOIN professors p ON p.prof_id=c.prof_id
INNER JOIN departments d ON p.dept_id = d.dept_id
GROUP BY d.dept_id, d.dept_name 
HAVING avg(c.enrollment)>40;

Calculate the total salary budget for each department, ordered from highest to lowest.


SELECT sum(p.salary), d.dept_name
FROM professors p 
INNER JOIN departments d ON d.dept_id = p.dept_id
GROUP BY d.dept_name, d.dept_id
ORDER BY sum(p.salary) DESC;

Find the professor(s) with salary above the overall average salary.

SELECT salary, prof_name
FROM professors
WHERE salary > (SELECT avg(salary) FROM professors);

Get the minimum enrollment in each department.

SELECT min(c.enrollment), d.dept_name
FROM courses c 
INNER JOIN professors p ON p.prof_id=c.prof_id
INNER JOIN departments d ON p.dept_id=d.dept_id
GROUP BY d.dept_id, d.dept_name





