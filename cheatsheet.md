cd  c:\Programs\dev\logstash-2.1.1\bin
logstash -f w:\www\projects\monolog-logstash\logstash.conf

cd C:\Programs\dev\kibana-4.3.1-windows\bin
kibana.bat

cd C:\Programs\dev\elasticsearch-2.1.1\bin
elasticsearch

cd W:\www\projects\monolog-logstash
php -S localhost:8080

cd C:\xampp\apache\bin
ab -n 1000 -c 10 http://localhost:8080/
