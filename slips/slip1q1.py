# Q.1) Write a Python function to check whether a number is in a given range.
def check(rang,num):
    j=0
    for i in range(0,rang+1):
        if(i==num):
            print("Given number in given rage\n")
            j=1
    if(j==0):
        print("Given number is not in given rage")

check(10,60)
            