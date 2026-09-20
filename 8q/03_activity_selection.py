def activity_selection(start, finish):
    activities = list(zip(start, finish))

    # Sort activities by finish time
    activities.sort(key=lambda x: x[1])

    selected = []
    last_end = 0

    for s, f in activities:
        if s >= last_end:
            selected.append((s, f))
            last_end = f

    return selected


start = [1, 3, 0, 5, 8, 5]
finish = [2, 4, 6, 7, 9, 9]

result = activity_selection(start, finish)

print("Selected activities:", result)
print("Total activities:", len(result))
