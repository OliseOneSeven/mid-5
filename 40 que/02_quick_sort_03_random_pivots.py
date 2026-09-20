import random

a = [random.randint(1, 100) for _ in range(20)]

def quick_sort(a):
    if len(a) <= 1:
        return a
    pivot = a[-1]
    print("Pivot:", pivot)
    left = [x for x in a[:-1] if x <= pivot]
    right = [x for x in a[:-1] if x > pivot]
    return quick_sort(left) + [pivot] + quick_sort(right)

print("Original:", a)
print("Sorted:", quick_sort(a))
