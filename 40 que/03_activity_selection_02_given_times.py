activities = [(1, 3), (2, 5), (4, 7), (6, 8), (8, 9)]
activities.sort(key=lambda x: x[1])

selected = []
last_finish = -1

for start, finish in activities:
    if start >= last_finish:
        selected.append((start, finish))
        last_finish = finish

print(selected)
