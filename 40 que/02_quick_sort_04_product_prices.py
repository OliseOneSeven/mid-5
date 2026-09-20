def quick_sort(a):
    if len(a) <= 1:
        return a
    pivot = a[-1]
    left = [x for x in a[:-1] if x <= pivot]
    right = [x for x in a[:-1] if x > pivot]
    return quick_sort(left) + [pivot] + quick_sort(right)

prices = [499.0, 199.5, 999.0, 249.0, 799.5]
print(quick_sort(prices))
