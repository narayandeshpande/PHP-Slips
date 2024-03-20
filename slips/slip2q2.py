# Q.2) Write a Python program to perform given operations on set
# a. check whether 2 sets are equal or not 
# b. Symmetric difference 
# c. Intersection of sets 
# d. Find maximum and the minimum value in a set. 
a={1,2,3,4,5}
b={6,4,2,8,9}

if(a==b):
    print("Two sets are same")
else:
    print("Two sets are not same")

print(a.symmetric_difference(a))
print(a.intersection(b))
print(max(a))
print(min(a))

print(max(b))
print(min(b))