# Q.2) Write a Python program to display occurrence of the elements in the tuple, which appears 
# more than 2 times
a=(1,2,3,4,5,5,6,6,7,8,9,6)
for i in a:
    count=[]
    for j in range(0,len(a)):
        if(i==a[j]):
            count.append(j)
    if(len(count)>2):
        print("Occurence of repeded elemets is ",count)
        break
