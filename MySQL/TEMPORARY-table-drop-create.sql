CREATE TEMPORARY TABLE SalesSummary (
product_name VARCHAR(50) NOT NULL
,total_sales DECIMAL(12,2) NOT NULL DEFAULT 0.00
, avg_unit_price DECIMAL(7,2) NOT NULL DEFAULT 0.00
, total_units_sold INT UNSIGNED NOT NULL DEFAULT 0
);

INSERT INTO SalesSummary
(product_name, total_sales, avg_unit_price, total_units_sold)
VALUES
('cucumber', 100.25, 90, 2);

SELECT * FROM SalesSummary;

DROP TABLE SalesSummary;

SELECT * FROM SalesSummary;
