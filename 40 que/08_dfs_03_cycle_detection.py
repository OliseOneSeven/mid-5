graph = {
    0: [1, 2],
    1: [0, 2],
    2: [0, 1, 3],
    3: [2]
}

visited = set()

def has_cycle(vertex, parent):
    visited.add(vertex)

    for node in graph[vertex]:
        if node not in visited:
            if has_cycle(node, vertex):
                return True
        elif node != parent:
            return True

    return False

print("Cycle exists" if has_cycle(0, -1) else "No cycle")
