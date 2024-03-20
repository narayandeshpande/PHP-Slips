 # Q.1) Write a Python program to find the repeated items of a tuple.
a=(1,2,3,4,4,5,5,6)
c=[]
for i in a:
    count=0
    for j in a:
        if(i==j):
            count+=1
    if(count>1):
        c.append(i)
print(set(c))
