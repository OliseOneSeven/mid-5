employees = [
    (101, "Aman", 45000),
    (102, "Riya", 30000),
    (103, "Karan", 55000),
    (104, "Neha", 40000)
]

def merge_sort(a):
    if len(a) <= 1:
        return a
    m = len(a) // 2
    left = merge_sort(a[:m])
    right = merge_sort(a[m:])
    result = []
    i = j = 0
    while i < len(left) and j < len(right):
        if left[i][2] <= right[j][2]:
            result.append(left[i])
            i += 1
        else:
            result.append(right[j])
            j += 1
    return result + left[i:] + right[j:]

print(merge_sort(employees))
