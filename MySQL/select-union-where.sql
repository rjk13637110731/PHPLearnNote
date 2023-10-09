SELECT country FROM WebsitesUNIONSELECT country FROM appsORDER BY country;

SELECT country FROM WebsitesUNION ALLSELECT country FROM apps ORDER BY country;

SELECT country, name FROM WebsitesWHERE country='CN'UNION ALL	SELECT country, app_name FROM appsWHERE country='CN'ORDER BY country;
