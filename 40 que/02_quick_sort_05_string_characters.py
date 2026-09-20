def quick_sort(a):
    if len(a) <= 1:
        return a
    pivot = a[-1]
    left = [x for x in a[:-1] if x.lower() <= pivot.lower()]
    right = [x for x in a[:-1] if x.lower() > pivot.lower()]
    return quick_sort(left) + [pivot] + quick_sort(right)

text = "computer"
print("".join(quick_sort(list(text))))
