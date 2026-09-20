graph = {
    0: [1, 2],
    1: [0, 3],
    2: [0, 3],
    3: [1, 2]
}

visited = set()

def dfs(vertex):
    visited.add(vertex)
    print(vertex, end=" ")

    for node in graph[vertex]:
        if node not in visited:
            dfs(node)

dfs(0)
