def quick_sort(a):
    if len(a) <= 1:
        return a
    pivot = a[-1]
    left = [x for x in a[:-1] if x <= pivot]
    right = [x for x in a[:-1] if x > pivot]
    return quick_sort(left) + [pivot] + quick_sort(right)

a = [10, 7, 8, 9, 1, 5]
print(quick_sort(a))
