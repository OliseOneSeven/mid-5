n = int(input("Number of activities: "))
activities = []

for i in range(n):
    start = int(input("Start time: "))
    finish = int(input("Finish time: "))
    activities.append((start, finish))

activities.sort(key=lambda x: x[1])

selected = []
last_finish = -1

for activity in activities:
    if activity[0] >= last_finish:
        selected.append(activity)
        last_finish = activity[1]

print("Selected:", selected)
