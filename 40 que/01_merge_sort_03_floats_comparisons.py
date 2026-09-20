a = [3.2, 1.5, 7.8, 2.1, 9.4, 4.6, 5.3, 8.2, 6.7, 0.9, 2.8, 4.1, 7.1, 1.2, 5.9]
comparisons = 0

def merge_sort(a):
    global comparisons
    if len(a) <= 1:
        return a
    m = len(a) // 2
    left = merge_sort(a[:m])
    right = merge_sort(a[m:])
    result = []
    i = j = 0
    while i < len(left) and j < len(right):
        comparisons += 1
        if left[i] <= right[j]:
            result.append(left[i])
            i += 1
        else:
            result.append(right[j])
            j += 1
    return result + left[i:] + right[j:]

print(merge_sort(a))
print("Comparisons:", comparisons)
