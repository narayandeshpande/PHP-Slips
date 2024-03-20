# Q.2) Write a Python function to multiply all the numbers in a list. [20 M] 
# Sample-List: (8, 2, 3, -1, 7) 
# Expected Output: -336 
def mul(a):
    mul1=1
    for i in a:
        mul1=mul1*i
    return mul1
a=[8, 2, 3, -1, 7]
print(mul(a))
