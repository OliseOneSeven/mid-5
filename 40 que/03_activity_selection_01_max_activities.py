def activity_selection(activities):
    activities.sort(key=lambda x: x[1])
    selected = []
    finish = -1
    for start, end in activities:
        if start >= finish:
            selected.append((start, end))
            finish = end
    return selected

activities = [(1, 2), (3, 4), (0, 6), (5, 7), (8, 9), (5, 9)]
print(activity_selection(activities))
