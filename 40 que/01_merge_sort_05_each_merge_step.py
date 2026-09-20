a = [8, 4, 7, 3, 9, 2]

def merge_sort(a):
    if len(a) <= 1:
        return a
    m = len(a) // 2
    left = merge_sort(a[:m])
    right = merge_sort(a[m:])
    result = []
    i = j = 0
    while i < len(left) and j < len(right):
        if left[i] <= right[j]:
            result.append(left[i])
            i += 1
        else:
            result.append(right[j])
            j += 1
    result += left[i:] + right[j:]
    print("After merge:", result)
    return result

merge_sort(a)
