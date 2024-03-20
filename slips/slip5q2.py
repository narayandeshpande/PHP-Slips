#  Q.2) Write a function to calculate the sum of numbers from 0 to n. 
def sum(num):
    sum1=0
    for i in range(0,num+1):
        sum1+=i
    return sum1
a=int(input("Enter range"))
print(sum(a))