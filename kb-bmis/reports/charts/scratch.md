<!-- ayaw sa idelete -->

# SQL QUERIES IN CHARTS

``sql
SELECT SUM(price) as jan ,MONTHNAME(date_issued) as 'Month Name'
FROM barangay_clearance WHERE YEAR(date_issued) = YEAR(CURDATE()) AND monthname(date_issued) =
'February'
GROUP BY YEAR(date_issued),MONTH(date_issued)

weekly
SELECT DATE(date_issued) as Date, DAYNAME(date_issued) as 'Day Name', SUM(price) as weeksales
FROM barangay_clearance
WHERE date(date_issued) > DATE_SUB(NOW(), INTERVAL 1 WEEK) AND MONTH(date_issued) = MONTH(CURDATE()) AND
YEAR(date_issued) = YEAR(CURDATE())
GROUP BY DAYNAME(date_issued) ORDER BY (date_issued)

SELECT DATE(date_issued) as Date, DAYNAME(date_issued) as 'Day Name', SUM(price) as weeksales
FROM barangay_clearance
WHERE date(date_issued) > DATE_SUB(NOW(), INTERVAL 1 WEEK) AND MONTH(date_issued) = MONTH(CURDATE()) AND
YEAR(date_issued) = YEAR(CURDATE()) AND dayname(date_issued) =
'Monday'
GROUP BY DAYNAME(date_issued) ORDER BY (date_issued)

``
