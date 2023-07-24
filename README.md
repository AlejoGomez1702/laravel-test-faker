# Documentación registrar n employees en DB usando Faker

Ya Sabemos usar faker, esto hemos realizado:

1. Crear un backend(api) en laravel 
2. Agregamos un endpoint(route) para probar faker
3. Implementamos el endpoint, generar datos dumys con faker y retornarlos cada que se llamaba el endpoint
---------------------------------------------------------------------------------------------------------
## Esto es manipulando la DB MySql con PhpMyAdmin
4. Generar datos dumys con faker y poblar una tabla en BD MySql y PhpMyAdmin
	- Crear la base de datos "test_faker" usando phpMyAdmin
	- Conectar la base de datos con mi proyecto de laravel(.ENV)
	- Crear una tabla de ejemplo 'employees', (migrations)
		id
		first_name
		second_name
		surname
		second_surname
		curp
		email
		phone
		enterprise_name
		gender
		bank_name
		bank_account_number
	- Crear un nuevo endpoint que al llamarlo agregue un registro de employee en DB (datos manuales)
	- ""   """ "" (Mediante faker)
	- Crear un endpoint que le paso n número de datos y los registra mediante faker en DB