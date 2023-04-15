SELECT * STUDENTS.FIRST_NAME, STUDENTS.LAST_NAME, avg(GRADES.PERCENT) AS average FROM STUDENTS 
JOIN GRADES ON STUDENTS.STUDENT_ID = GRADES.STUDENT_ID WHERE GRADES.GRADELEVEL IN (9, 10, 11, 12)
GROUP BY (STUDENTS.FIRST_NAME, STUDENTS.LAST_NAME)


SELECT invoices.id, invoices.title, sum(invoice_allocations.amount) as total_payment from invoice
JOIN invoice_allocations ON invoices.id = invoice_allocations.invoice_id WHERE invoice_allocations.paid = 1
GROUP BY (invoices.title)