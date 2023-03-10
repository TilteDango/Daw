"""
Ejercicio 02

Escribe un programa que lea del fichero de buzón de correo
mbox-short.txt (http://www.pythonlearn.com/code/mbox-short.txt) y cada vez que
se encuentre una línea que empiece por "From" separarla en palabras. Interesa
quién envió el mensaje (segunda palabra de la línea "From") sin la parte del
dominio. Es decir, de:
From stephen.marquard@uct.ac.za Sat Jan 5 09:14:16 2008
mostraremos solo "stephen.marquard".
El programa debe mostrar la lista de los usuarios ordenada alfabéticamente,
sin repetir ninguno y finalizar visualizando el total de líneas encontradas.
"""

try:
    handler = open('test2.txt')
except IOError:
    print("No se ha encontrado el fichero")

users = []

for line in handler:
    if 'From' in line:
        cad = line.split()
        email = cad[1]
        user = email.split('@')[0]
        if user not in users:
            users.append(user)
       
users.sort()
print (users)





if __name__ == '__main__':
    import doctest
    doctest.testmod()